import React from 'react';
import { Container } from 'react-bootstrap';
import { useLocation } from 'react-router-dom';

const Footer = () => {

  // Define pages where the navigation bar should be hidden
  const pagesWithoutFooter = ['/signup', '/login'];

  // Get the current location
  const location = useLocation();

  // Check if the current page is in the list of pages without the navbar
  const isFooterHidden = pagesWithoutFooter.includes(location.pathname);
  
  return (
    <>
    {!isFooterHidden && (
      <footer className=" text-light pt-5  fs-6">
      <Container>
        <p style={{ textAlign:'center', fontSize: 'small' }}>© 2023 Aniafterdark. All Rights Reserved.</p>
      </Container>
      </footer>
    )}
    </>
  );
};

export default Footer;