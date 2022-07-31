import React, {useState, useEffect} from "react";
import axios from "axios";
const ShowInfo = ()=>{
    const [posts, setPosts] = useState([]);

    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/discount")
        .then(resp=>{
            console.log(resp.data);
            setPosts(resp.data);
        }).catch(err=>{
            console.log(err);
        });
    },[]);
    return(
        <div>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Point</th>
                    <th>Amount</th>
                </tr>
                    {posts.map(post=>(
                   <tr key={post.id}>
                    <td >{post.id}</td>
                    <td >{post.point}</td>
                    <td >{post.amount}</td>
                </tr>
                    ))}
            </table>
        </div>
    )
}
export default ShowInfo;