import React, { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import { Container, Form, Button } from 'react-bootstrap';
import axios from 'axios';

const SignUp = () => {
  const [username, setUsername] = useState('');
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  
const [confirmPassword, setConfirmPassword] = useState(''); // Added for password confirmation
  const [errorMessage, setErrorMessage] = useState('');
  const [isLoading, setIsLoading] = useState(false); // Added for loading state
  const navigate = useNavigate();

  // Function to handle sign-up
  const handleSignUp = async (e) => {
    e.preventDefault(); // Prevent form submission from reloading the page

    setErrorMessage(''); // Clear any previous errors
    setIsLoading(true); // Set loading state to true

    // Validate input
    if (!username || !email || !password || !confirmPassword) {
      setErrorMessage('Please fill all the fields.');
      setIsLoading(false);
      return;
    }

    if (password !== confirmPassword) {
      setErrorMessage('Passwords do not match.');
      setIsLoading(false);
      return;
    }

    try {
      // Make a POST request to your server's register endpoint
      const response = await axios.post('http://localhost:4000/register', {
        username,
        email,
        password,
      });

      console.log('Registration Successfull:', response);

      // Redirect to the home page
      navigate('/login');
    } catch (error) {
      console.error('Registration Error:', error);
      setErrorMessage(error.message || 'Registration failed. Please try again.');
    } finally {
      setIsLoading(false); // Set loading state to false
    }
  };

  return (
    <Container className="bg-black position-absolute top-50 start-50 translate-middle text-white p-5" style={{ width: '70%' }}>
      <Link to="/" className='text-decoration-none'>
        <h1 className='text-white text-center'>ANIAFTERDARK</h1>
      </Link>

      <h2 className='text-center'>SIGN-UP</h2>

      <Form onSubmit={handleSignUp}>
        <Form.Group className="mb-3" controlId="formGridUsername">
          <Form.Label>Username</Form.Label>
          <Form.Control
            type="username"
            placeholder="Username"
            value={username}
            onChange={(e) => setUsername(e.target.value)}
          />
        </Form.Group>
        <Form.Group className="mb-3" controlId="formGridEmail">
          <Form.Label>Email</Form.Label>
          <Form.Control
            type="email"
            placeholder="email@example.com"
            value={email}
            onChange={(e) => setEmail(e.target.value)}
          />
        </Form.Group>

        <Form.Group className="mb-3" controlId="formGroupPassword">
          <Form.Label>Password</Form.Label>
          <Form.Control
            type="password"
            placeholder="********"
            value={password}
            onChange={(e) => setPassword(e.target.value)}
          />
        </Form.Group>

        <Form.Group className="mb-3" controlId="formGroupConfirmPassword">
          <Form.Label>Confirm Password</Form.Label>
          <Form.Control
            type="password"
            placeholder="********"
            value={confirmPassword}
            onChange={(e) => setConfirmPassword(e.target.value)}
          />
        </Form.Group>

        {errorMessage && <p className="text-danger">{errorMessage}</p>}

        <Button variant="warning" type="submit" style={{ width: '100%', fontWeight: '900' }}>
          Sign-Up
        </Button>
      </Form>

      <br/><br/>

      <Link to="/login" className='text-decoration-none text-white text-center'>Already have an account? Login here</Link>
    </Container>
  );
};

export default SignUp;
