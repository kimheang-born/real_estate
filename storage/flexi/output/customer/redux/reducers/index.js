import { combineReducers } from "redux";

// START IMPORT REDUCERS
import CustomerEditReducer from "./CustomerEditReducer";
import CustomerListReducer from "./CustomerListReducer";


const rootReducer = combineReducers({
  
  // START COMBINE REDUCERS
	CustomerEditReducer,
	CustomerListReducer,
 // END COMBINE REDUCERS
 
});

export default rootReducer;
