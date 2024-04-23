import { Route, Routes } from "react-router-dom";
import Customers from "../../Pages/Customers";
import Dashboard from "../../Pages/Dashbaord";
import Inventory from "../../Pages/Inventory";

function AppRoutes() {
  return (
    <Routes>
      <Route path="/Dashboard" element={<Dashboard />}></Route>
      <Route path="/Annonces" element={<Inventory />}></Route>
      <Route path="/Clients" element={<Customers />}></Route>
    </Routes>
  );
}
export default AppRoutes;
