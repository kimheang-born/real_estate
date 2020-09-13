
import actionsFunction from "./generated/CustomerActionsGenerated";

// You can customize the base actions overriding the object "actionsFunction" as shown in the example below:
/** 
 // EXAMPLE:
 
 import CustomerApi from "../../api/CustomerApi";
 
 actionsFunction.loadCustomerList = function() {
   return function(dispatch) {
     console.log("This is my custom function");
     return CustomerApi
     .getCustomerList()
     .then(list => {
       dispatch(actionsFunction.loadCustomerSuccess(list));
      })
      .catch(error => {
        throw error;
      });
    };
  };
   
*/

export default actionsFunction;
