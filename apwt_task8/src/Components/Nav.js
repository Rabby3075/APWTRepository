import React from "react";
import { Link } from "react-router-dom";
const Nav = () => {
    return(
        <>
        <Link to='/'>Home</Link>
        <Link to='/laravelInfo'>Laravel Data</Link>
        <Link to='/Login'>Login</Link>
        </>
    )
}
export default Nav;