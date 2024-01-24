import React, { useState } from 'react';
import { Container, Nav, Navbar, Button, Form, NavDropdown } from 'react-bootstrap';
import { Link, useLocation, useNavigate } from 'react-router-dom'; // Import useLocation
import './Index.css';
import { useAuth } from './AuthContext';

function DesktopNavBar() {
  const location = useLocation();
  const [isSearchOpen, setIsSearchOpen] = useState(false);
  const [searchQuery, setSearchQuery] = useState('');
  //const { isAuthenticated, logout } = useAuth()
  const navigate = useNavigate(); // Use the useNavigate hook

  // ... (previous code)

const { isAuthenticated, logout } = useAuth();
console.log('isAuthenticated:', isAuthenticated);

// ... (rest of the code)


  const handleSearchClick = () => {
    setIsSearchOpen(!isSearchOpen);
  };

  const handleGenreClick = (genre) => {
    navigate(`/genre/${genre}`);
  };

  const handleSearchSubmit = (e) => {
    e.preventDefault();
    // Perform search or navigate to a search results page with the query
    navigate(`/search?query=${encodeURIComponent(searchQuery)}`);
  };

  const pagesWithoutNavbar = ['/signup', '/login'];
  const isNavbarHidden = pagesWithoutNavbar.includes(location.pathname);

  return (
    <>
      {!isNavbarHidden && (
        <Navbar fixed="top" bg="black" className='nav'>
          <Container className='md-auto'>
            <Link to="/" className='text-decoration-none'>
              <Navbar.Brand className='brand text-white'>ANIAFTERDARK</Navbar.Brand>
            </Link>

            <Nav className="me-auto">
              <Link to="/shows" className='nav-link text-white'>SHOWS</Link>

              <NavDropdown title="GENRE" id="collasible-nav-dropdown">
                <NavDropdown.Item className='dropdown-item bg-black text-white pt-4' onClick={() => handleGenreClick('psychological')}>
                  PSYCHOLOGICAL
                </NavDropdown.Item>
                <NavDropdown.Item className='dropdown-item bg-black text-white pt-4' onClick={() => handleGenreClick('drama')}>
                  DRAMA
                </NavDropdown.Item>
                <NavDropdown.Item className='dropdown-item bg-black text-white pt-4' onClick={() => handleGenreClick('comedy')}>
                  COMEDY
                </NavDropdown.Item>
                <NavDropdown.Item className='dropdown-item bg-black text-white pt-4' onClick={() => handleGenreClick('action')}>
                  ACTION
                </NavDropdown.Item>
              </NavDropdown>
            </Nav>

            <div className="search-icon" onClick={handleSearchClick}>
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" className="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg>
            </div>

            {isSearchOpen && (
               <div className="search-bar">
               <Form onSubmit={handleSearchSubmit}>
                 <Form.Control
                   type="text"
                   placeholder="Search..."
                   value={searchQuery}
                   onChange={(e) => setSearchQuery(e.target.value)}
                 />
               </Form>
             </div>
            )}

            {isAuthenticated ? (
              <Link to="/">
                <Button className='fw-bolder bg-white text-black border-0' onClick={logout}>LOGOUT</Button>
              </Link>
             
            ) : (
              // Render sign-up button if the user is not logged in
              <Link to="/signup">
                <Button className='fw-bolder bg-white text-black border-0'>SIGN-UP</Button>
              </Link>
            )}
          </Container>
        </Navbar>
      )}
    </>
  );
}

export default DesktopNavBar;
