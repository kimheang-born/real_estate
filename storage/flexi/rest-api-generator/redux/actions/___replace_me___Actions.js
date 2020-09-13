
import actionsFunction from "./generated/___replace_me___ActionsGenerated";

// You can customize the base actions overriding the object "actionsFunction" as shown in the example below:
/** 
 // EXAMPLE:
 
 import ___replace_me___Api from "../../api/___replace_me___Api";
 
 actionsFunction.load___replace_me___List = function() {
   return function(dispatch) {
     console.log("This is my custom function");
     return ___replace_me___Api
     .get___replace_me___List()
     .then(list => {
       dispatch(actionsFunction.load___replace_me___Success(list));
      })
      .catch(error => {
        throw error;
      });
    };
  };
   
*/

export default actionsFunction;