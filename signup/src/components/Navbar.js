import React from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import { Nav, NavItem, NavLink } from 'reactstrap';

function navComponent() {
  return (
    <div className=' d-flex justify-content-center'>
    <Nav pills>
      <NavItem>
        <NavLink href="#" style={{ color: 'black' }}>
          Home
        </NavLink>
      </NavItem>
      <NavItem>
        <NavLink href="#" style={{ color: 'black' }}>
          About
        </NavLink>
      </NavItem>
      <NavItem>
        <NavLink href="#" style={{ color: 'black' }}>
          Contact us
        </NavLink>
      </NavItem>
      <NavItem>
        <NavLink href="#" style={{ color: 'black' }}>
          Signup/Login
        </NavLink>
      </NavItem>
    </Nav>
    </div>
  );
}

export default navComponent;
