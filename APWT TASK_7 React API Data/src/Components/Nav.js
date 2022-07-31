import React from "react";
import { Link } from "react-router-dom";
const Nav = () => {
    return(
        <>
        <Link to='/'>Home</Link>
        <Link to='/laravelInfo'>Laravel Data</Link>
        </>
    )
}
export default Nav;