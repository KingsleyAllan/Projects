// src/DeskopNav.js
import React, { useState, useEffect } from "react";
import { Container, Nav, Navbar, NavbarBrand } from "react-bootstrap";
// import { Link } from "react-scroll";
import "../Fonts.css";
import "../App.css";

function DeskopNav() {
  const [scrolling, setScrolling] = useState(false);

  // Listen to scroll event and set the state
  useEffect(() => {
    const handleScroll = () => {
      if (window.scrollY > 10) {  // Change 10 to adjust when the effect starts
        setScrolling(true);
      } else {
        setScrolling(false);
      }
    };

    window.addEventListener("scroll", handleScroll);

    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  return (
    <Navbar
      className={`nav fixed-top navbar-expand-lg navbar-light ${
        scrolling ? "navbar-scrolled" : ""
      }`}
    >
      <Container className="md-auto">
        <NavbarBrand href="#" className="name fs-6">
          Allan Kingsley
        </NavbarBrand>
      </Container>
      <Nav className="me-auto links fs-5">
        {/* <Nav.Link href="#about" className="text-white">
          About
        </Nav.Link> */}
        <Nav.Link href="#work" className="text-white">
          Work
        </Nav.Link>
        <Nav.Link href="#contact" className="text-white">
          Contact
        </Nav.Link>
      </Nav>
    </Navbar>
  );
}

export default DeskopNav;
