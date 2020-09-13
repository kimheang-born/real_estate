import axios from "axios";
import { properties } from "../../config/properties";

class CustomerApiGenerated {

  static contextUrl = properties.endpoint + "/customer";

  // CRUD METHODS

  /**
  * CustomerService.create
  *   @description CRUD ACTION create
  *
  */
  static createCustomer(Customer) {
    return axios.post(CustomerApiGenerated.contextUrl, customer )
      .then(response => {
        return response.data;
      })
      .catch(error => {
        throw error;
      });
  }

  /**
  * CustomerService.delete
  *   @description CRUD ACTION delete
  *   @param ObjectId id Id
  *
  */
  static deleteCustomer(id) {
    return axios.delete(CustomerApiGenerated.contextUrl + "/" + id)
      .then(response => {
        return response.data;
      })
      .catch(error => {
        throw error;
      });
  }

  /**
  * CustomerService.get
  *   @description CRUD ACTION get
  *   @param ObjectId id Id resource
  *
  */
  static getOneCustomer(id) {
    return axios.get(CustomerApiGenerated.contextUrl + "/" + id)
      .then(response => {
        return response.data;
      })
      .catch(error => {
        throw error;
      });
  }

  /**
  * CustomerService.list
  *   @description CRUD ACTION list
  *
  */
  static getCustomerList() {
    return axios.get(CustomerApiGenerated.contextUrl)
      .then(response => {
        return response.data;
      })
      .catch(error => {
        throw error;
      });
  }

  /**
  * CustomerService.list
  *   @description CRUD ACTION form_option
  *
  */
 static getCustomerFormOption() {
  return axios.get(CustomerApiGenerated.contextUrl+"/form_option")
    .then(response => {
      return response.data;
    })
    .catch(error => {
      throw error;
    });
}

  /**
  * CustomerService.list
  *   @description CRUD ACTION search_option
  *
  */
 static getCustomerSearchOption() {
  return axios.get(CustomerApiGenerated.contextUrl+"/search_option")
    .then(response => {
      return response.data;
    })
    .catch(error => {
      throw error;
    });
}

  /**
  * CustomerService.update
  *   @description CRUD ACTION update
  *   @param ObjectId id Id
  *
  */
  static saveCustomer(customer) {
    return axios.post(CustomerApiGenerated.contextUrl + "/" + customer._id, customer )
      .then(response => {
        return response.data;
      })
      .catch(error => {
        throw error;
      });
  }



    // Custom APIs
}

export default CustomerApiGenerated;
