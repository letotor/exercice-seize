import react from 'react'
import ReactLogo from "../img/rocket.svg";
const Navbarre = ()=>{


    return(
    <header>
        <a href="#">
        <img href="#" className="logo" src={ReactLogo} width='30px' height='30px' alt="logo"/>
        </a>
        <nav className="nav" role="navigation">
            <ul className="menu">
            <li><a href="#services">Services</a></li>
            <li><a href="#projets">Projet</a></li>
            <li><a href="#equipe">Equipe</a></li>
            <li><a href="#contact">Contact</a></li>
            </ul>
    </nav>
  </header>
    )
}

export default Navbarre