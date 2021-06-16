import React from "react";
import "./assets/main.css";
import "./assets/styles.css";
import styled from "styled-components";
import Navebarre from "./components/Navbarre";

const Titre = styled.div`
  display: flexbox;
  align-items: center;
  text-align: center;
  justify-content: center;
  height: 100vh;
  font-size: 72px;
  color: rgb(229, 149, 164);
`;

const App = () => {
  return (
    <>
      <Navebarre />
      <Titre>Bienvenu à l'agence Seize</Titre>
    </>
  );
};

export default App;
