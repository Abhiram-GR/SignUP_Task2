import React from 'react';
import './App.css';
import FormComponent from './components/Form';
import NavComponent from './components/Navbar';

function App() {
  return (
    <div className="row back container-fluid">
     <NavComponent/>
     <FormComponent/>

    </div>
  );
}

export default App;
