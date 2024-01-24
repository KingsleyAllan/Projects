// AppRouter.js
import React, { useState, useEffect } from 'react';
import { Routes, Route } from 'react-router-dom';
import Home from './Components/Home';
import MobileNavBar from './Components/MobileNav';
import DesktopNavBar from './Components/DesktopNav';
import SignUp from './Components/Register';
import Login from './Components/Login';
import Footer from './Components/Footer';
import Shows from './Components/Shows';
import './index.css';
import ShowDetail from './Components/ShowDetails';
import HomeShowDetail from './Components/HomeShowDetails';
import UserProfile from './Components/UserProfile';
import GenrePage from './Components/GenrePage';
import SearchResults from './Components/SearchResult';
import CarouselShowDetail from './Components/CarouselItemDetails';
//import { useAuth } from './Components/AuthContext';
//import ProtectedRoute from './Components/ProtectedRoute';

const AppRouter = () => {
  //const { isAuthenticated } = useAuth();
  const [windowWidth, setWindowWidth] = useState(window.innerWidth);

  useEffect(() => {
    const handleResize = () => {
      setWindowWidth(window.innerWidth);
    };

    setWindowWidth(window.innerWidth);

    window.addEventListener('resize', handleResize);
    return () => {
      window.removeEventListener('resize', handleResize);
    };
  }, []);

  return (
    <div>
      {windowWidth >= 780 ? <DesktopNavBar /> : <MobileNavBar />}

      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/signup" element={<SignUp />} />
        <Route path="/login" element={<Login />} />
        <Route path="/shows" element={<Shows />} />
        <Route path="/genre/:genre" element={<GenrePage />} />
        <Route path="/search" element={<SearchResults />} />
        <Route path="/PorpularShows/:id" element={<CarouselShowDetail />} />
        <Route path="/cards/:id" element={<HomeShowDetail />} />
        <Route path="/shows/:id" element={<ShowDetail />} />
        <Route path="/profile" element={<UserProfile />} />


        {/* <Route 
          path="/cards/:id" 
          element={
            isAuthenticated ? <HomeShowDetail /> : <ProtectedRoute />}
        />
        <Route 
          path="/PorpularShows/:id" 
          element={
            isAuthenticated ? <CarouselShowDetail /> : <ProtectedRoute />} 
        />
        <Route 
          path="/shows/:id" 
          element={
            isAuthenticated ? <ShowDetail /> : <ProtectedRoute />} 
        /> */}
      </Routes>

      <Footer />
    </div>
  );
};

export default AppRouter;
