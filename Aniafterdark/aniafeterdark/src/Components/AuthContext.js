// AuthContext.js
import React, { createContext, useState, useContext, useEffect } from 'react';
import Cookies from 'js-cookie';
import axios from 'axios';

const AuthContext = createContext();

export const AuthProvider = ({ children }) => {
  const [isAuthenticated, setIsAuthenticated] = useState(false);
  const [user, setUser] = useState(null);

  const fetchUserData = async () => {
    try {
      console.log('Fetching user data...');
      const accessToken = Cookies.get('accessToken');
      console.log('Access token:', accessToken);
  
      if (!accessToken) {
        throw new Error('Access token not found');
      }
  
      const response = await axios.get('http://localhost:4000/protected', {
        headers: { Authorization: `Bearer ${accessToken}` },
      });
  
      console.log('User data successfully fetched:', response.data);
  
      setIsAuthenticated(true);
      setUser(response.data.user);
    } catch (error) {
      console.error('Error fetching user data', error);
      setIsAuthenticated(false);
      setUser(null);
      // Print more details about the error
      console.error('Error details:', error.response.data);
      throw error;
    }
  };  

  useEffect(() => {
    console.log('AuthProvider mounted');
    const accessToken = Cookies.get('accessToken');
    if (accessToken) {
      // Fetch user data
      fetchUserData();
    }
  }, []);

  const login = async (userData) => {
    console.log('Login function called with:', userData);
    setUser(userData.user);
    setIsAuthenticated(userData.isAuthenticated);
    Cookies.set('accessToken', userData.accessToken, {
      httpOnly: true,
      secure: true,
      sameSite: 'strict',
    });

    Cookies.set('refreshToken', userData.refreshToken, {
      httpOnly: true,
      secure: true,
      sameSite: 'strict',
    });

    console.log('After login - isAuthenticated:', isAuthenticated);
    console.log('After login - user:', user);

    // Attempt to fetch user data after login
    try {
      await fetchUserData();
    } catch (error) {
      console.error('Error fetching user data after login:', error);
    }

    console.log('After fetchUserData - isAuthenticated:', isAuthenticated);
    console.log('After fetchUserData - user:', user);
  };

  const logout = () => {
    Cookies.remove('accessToken');
    Cookies.remove('refreshToken');
    setIsAuthenticated(false);
    setUser(null);
  };

  return (
    <AuthContext.Provider value={{ isAuthenticated, user, login, logout, fetchUserData }}>
      {children}
    </AuthContext.Provider>
  );
};

export const useAuth = () => {
  return useContext(AuthContext);
};