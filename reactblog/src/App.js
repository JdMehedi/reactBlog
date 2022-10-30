import "./App.css";
import { useState, useEffect } from "react";
import axios from "axios";
function App() {
  const [categories, setCategories] = useState([]);
  useEffect(() => {
    async function getAllCategories() {
      try {
        const ct = await axios.get("http://127.0.0.1:8000/api/categories");
        console.log(ct.data);
        setCategories(ct.data);
      } catch (error) {}
    }
    getAllCategories();
  }, []);
  return (
    <div className="App">
      <h1>Hi</h1>
      {categories.map((ct, i) => {
        return (
          (
            <h2>
           
              <p>{ct.description}</p>
            </h2>
          ),(
           <p> {ct.name}</p>
          )
        );
      })}
    </div>
  );
}

export default App;
