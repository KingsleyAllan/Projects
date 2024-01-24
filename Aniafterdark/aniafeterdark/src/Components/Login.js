import React, { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import { Button, Form, Container } from 'react-bootstrap';
import axios from 'axios';
import Cookies from 'js-cookie';
import './Index.css';
import { useAuth } from './AuthContext';

const Login = () => {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [errorMessage, setErrorMessage] = useState('');
  const [loading, setLoading] = useState(false);
  const navigate = useNavigate();
  const { login } = useAuth();

  const loginUser = async (e) => {
    e.preventDefault();

    // Simple validation
    if (!email || !password) {
      setErrorMessage('Email and password are required.');
      return;
    }

    try {
      setErrorMessage('');
      setLoading(true);

      const response = await axios.post('http://localhost:4000/login', {
        email,
        password,
      });

      if (response.data && response.data.accessToken) {

        Cookies.set('accessToken', response.data.accessToken, {
          httpOnly: true,
          secure: true,
          sameSite: 'strict',
        });

        Cookies.set('refreshToken', response.data.refreshToken, {
          httpOnly: true,
          secure: true,
          sameSite: 'strict',
        });;

        login({
          user: {
            username: response.data.username,
            email: response.data.email, 
          },
          isAuthenticated: true,
          accessToken: response.data.accessToken,
        });

        console.log('Login Successful');
        console.log('Access Token set:');        
        navigate('/');
      } else {
        setErrorMessage('Login failed. Please check your credentials.');
        navigate('/');
      }
    } catch (err) {
      console.error('Login error:', err);
      setErrorMessage('Failed to login. Please try again.');
    } finally {
      setLoading(false);
    }
  };

  return (
    <Container className="bg-black position-absolute top-50 start-50 translate-middle text-white p-5" style={{ width: '70%' }}>
      <Link to="/" className="text-decoration-none">
        <h1 className="text-white text-center">ANIAFTERDARK</h1>
      </Link>
      <h2 className="text-center">LOGIN</h2>

      <Form onSubmit={loginUser}>
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

        {errorMessage && <p className="text-danger">{errorMessage}</p>}

        <Button variant="warning" type="submit" disabled={loading} style={{ width: '100%', fontWeight: '900' }}>
          {loading ? 'Loading...' : 'Login'}
        </Button>
      </Form>

      <br /><br />

      <Link to="/signup" className="text-decoration-none text-white text-center">
        Don't have an account? SignUp here.
      </Link>
    </Container>
  );
};

export default Login;
