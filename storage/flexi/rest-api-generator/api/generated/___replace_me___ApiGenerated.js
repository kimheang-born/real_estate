import axios from "axios";
import { properties } from "../../config/properties";

class ___replace_me___ApiGenerated {

  static contextUrl = properties.endpoint + "/l___replace_me___";

  // CRUD METHODS

  /**
  * ___replace_me___Service.create
  *   @description CRUD ACTION create
  *
  */
  static create___replace_me___(___replace_me___) {
    return axios.post(___replace_me___ApiGenerated.contextUrl, l___replace_me___ )
      .then(response => {
        return response.data;
      })
      .catch(error => {
        throw error;
      });
  }

  /**
  * ___replace_me___Service.delete
  *   @description CRUD ACTION delete
  *   @param ObjectId id Id
  *
  */
  static delete___replace_me___(id) {
    return axios.delete(___replace_me___ApiGenerated.contextUrl + "/" + id)
      .then(response => {
        return response.data;
      })
      .catch(error => {
        throw error;
      });
  }

  /**
  * ___replace_me___Service.get
  *   @description CRUD ACTION get
  *   @param ObjectId id Id resource
  *
  */
  static getOne___replace_me___(id) {
    return axios.get(___replace_me___ApiGenerated.contextUrl + "/" + id)
      .then(response => {
        return response.data;
      })
      .catch(error => {
        throw error;
      });
  }

  /**
  * ___replace_me___Service.list
  *   @description CRUD ACTION list
  *
  */
  static get___replace_me___List() {
    return axios.get(___replace_me___ApiGenerated.contextUrl)
      .then(response => {
        return response.data;
      })
      .catch(error => {
        throw error;
      });
  }

  /**
  * ___replace_me___Service.list
  *   @description CRUD ACTION form_option
  *
  */
 static get___replace_me___FormOption() {
  return axios.get(___replace_me___ApiGenerated.contextUrl+"/form_option")
    .then(response => {
      return response.data;
    })
    .catch(error => {
      throw error;
    });
}

  /**
  * ___replace_me___Service.list
  *   @description CRUD ACTION search_option
  *
  */
 static get___replace_me___SearchOption() {
  return axios.get(___replace_me___ApiGenerated.contextUrl+"/search_option")
    .then(response => {
      return response.data;
    })
    .catch(error => {
      throw error;
    });
}

  /**
  * ___replace_me___Service.update
  *   @description CRUD ACTION update
  *   @param ObjectId id Id
  *
  */
  static save___replace_me___(l___replace_me___) {
    return axios.post(___replace_me___ApiGenerated.contextUrl + "/" + l___replace_me___._id, l___replace_me___ )
      .then(response => {
        return response.data;
      })
      .catch(error => {
        throw error;
      });
  }



    // Custom APIs
}

export default ___replace_me___ApiGenerated;