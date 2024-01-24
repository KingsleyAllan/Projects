import React, { useEffect } from 'react';
import { useAuth } from './AuthContext';

const UserProfile = () => {
  const { user, fetchUserData } = useAuth();

  useEffect(() => {
    const fetchData = async () => {
      try {
        // Fetch user data when the component mounts
        await fetchUserData();
      } catch (error) {
        console.error('Error fetching user data', error);
        // Handle errors, e.g., redirect to login page
      }
    };

    fetchData(); // Call the fetchData function

    // If you have additional dependencies, include them in the dependency array
  }, [fetchUserData]);

  return (
    <div>
      {user ? (
        <div>
          <h2 style={{ color: '#330A0B', textAlign: 'center', fontWeight: 'bolder' }} className='pt-5 fs-1'>
            PROFILE
          </h2>
          <p>username: {user.username}</p>
          <p>Email: {user.email}</p>
          {/* Other profile information */}
        </div>
      ) : (
        <p>Loading...</p>
      )}
    </div>
  );
};

export default UserProfile;
