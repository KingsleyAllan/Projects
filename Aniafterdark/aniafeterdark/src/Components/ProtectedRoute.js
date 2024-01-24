import React, { useEffect } from 'react';
import { Outlet,  } from 'react-router-dom';
import { useAuth } from './AuthContext';

const ProtectedRoute = () => {
  const { isAuthenticated, fetchUserData } = useAuth(); // Add fetchUserData from AuthContext
  // const navigate = useNavigate();
  // const location = useLocation();

  useEffect(() => {
    console.log('ProtectedRoute useEffect triggered');
    console.log('Is authenticated?', isAuthenticated);

    const fetchData = async () => {
      try {
        await fetchUserData(); // Fetch user data when the component mounts
      } catch (error) {
        // Handle error if necessary
        console.error('Error fetching user data:', error);
      }
    };

    if (!isAuthenticated) {
      fetchData(); // Fetch data when not authenticated
      // No need to navigate here; handle navigation in fetchUserData if needed
    }
  }, [isAuthenticated, fetchUserData]);

  return <Outlet />;
};

export default ProtectedRoute;
