import React, { useState } from 'react';
import { Container, Nav, Navbar, Offcanvas, NavDropdown, Form, Button } from 'react-bootstrap';
import { Link, useLocation, useNavigate } from 'react-router-dom';

function MobileNavBar() {
  const expand = 'lg';
  const [showOffcanvas, setShowOffcanvas] = useState(false);
  const location = useLocation();
  const [isSearchOpen, setIsSearchOpen] = useState(false);
  const [searchQuery, setSearchQuery] = useState('');
  const navigate = useNavigate();

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

  const handleOffcanvasToggle = () => {
    setShowOffcanvas((prevShowOffcanvas) => !prevShowOffcanvas);
  };

  // Define pages where the navigation bar should be hidden
  const pagesWithoutNavbar = ['/signup', '/login'];

  // Check if the current page is in the list of pages without the navbar
  const isNavbarHidden = pagesWithoutNavbar.includes(location.pathname);

  return (
    <Navbar fixed='top' expand={expand} className={`bg-black me-auto ${isNavbarHidden ? 'd-none' : ''}`}>
      <Container fluid>
        <Link to="/" className='text-decoration-none'>
          <Navbar.Brand className='brand text-white'>ANIAFTERDARK</Navbar.Brand>
        </Link>

        <svg
          onClick={handleOffcanvasToggle}
          aria-controls={`offcanvasNavbar-expand-${expand}`}
          xmlns="http://www.w3.org/2000/svg"
          width="35"
          height="35"
          fill="white"
          className="bi bi-list d-lg-none"
          viewBox="0 0 16 16"
        >
          <path
            fillRule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"
          />
        </svg>

        <Navbar.Collapse offcanvas="lg" className="justify-content-end">
          <Offcanvas
            show={showOffcanvas}
            onHide={handleOffcanvasToggle}
            id={`offcanvasNavbar-expand-${expand}`}
            aria-labelledby={`offcanvasNavbarLabel-expand-${expand}`}
            placement="end"
            className="bg-black text-white"
          >
            <Offcanvas.Header closeButton className='toggle'>
              <div className="d-flex justify-content-end">
                <button
                  className="btn-close btn-close-white"
                  onClick={handleOffcanvasToggle}
                ></button>
              </div>
            </Offcanvas.Header>

            <Offcanvas.Body>
              <Nav className="Mobile justify-content-end flex-grow-1 pe-3">
                <Nav.Link as={Link} to="/shows" className='text-white'>SHOWS</Nav.Link>

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

                <hr/>

                <Link to="/signup">
                  <Button className='fw-bolder bg-white text-black border-0'>SIGN-UP</Button>
                </Link>
              </Nav>
            </Offcanvas.Body>
          </Offcanvas>
        </Navbar.Collapse>
      </Container>
    </Navbar>
  );
}

export default MobileNavBar;
