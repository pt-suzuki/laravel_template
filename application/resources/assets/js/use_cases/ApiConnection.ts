import {AxiosResponse,AxiosError}  from 'axios'
import * as Axios from 'axios'

interface SuccessHandler { (report: any): void }
interface ErrorHandler { (error: any): void }

const AXIOS = Axios.default.create({
  headers: {
    Accept: 'application/json',
    'Content-Type': 'application/json',
    'X-CSRF-Token': $('meta[name=csrf-token]').attr('content'),
    'X-Requested-With': 'XMLHttpRequest',
  },
  validateStatus: function (status) {
    return status < 500;
  }
});

const login_AXIOS = Axios.default.create({
  headers: {
    Accept: 'application/x-www-form-urlencoded',
    'Content-Type': 'application/x-www-form-urlencoded',
    'X-CSRF-Token': $('meta[name=csrf-token]').attr('content'),
    'X-Requested-With': 'XMLHttpRequest',
  },
});

AXIOS.interceptors.response.use((response) =>{
  return response;
}, function(error){
  return Promise.reject(error.response)
})

AXIOS.interceptors.request.use((config) =>{
  config.headers.Authorization = 'Bearer ' + localStorage.getItem('access_token')
  return config
})

export default class ApiConnection {

  constructor() {}

  // getリクエスト
  async get(url:string, json: any) {
    json.csrfToken = this.create_csrf_token()
    return await AXIOS.get(url,{params:json})
  }
  // postリクエスト
  async post(url:string,json: any) {
    json.csrfToken = this.create_csrf_token()
    return AXIOS.post(url, json)
  }
  // login用postリクエスト
  async login_post(url:string,obj: URLSearchParams) {
    obj.append("csrfToken",this.create_csrf_token())
    return login_AXIOS.post(url, obj)
  }
  // putリクエスト
  async put(url:string,json:any) {
    json.csrfToken = this.create_csrf_token()
    return AXIOS.put(url, json)
  }
  // deleteリクエスト
  async delete(url:string,json:any) {
    json.csrfToken = this.create_csrf_token()
    return AXIOS.delete(url, json)
  }

  async post_file(url:string,params:FormData){
    return AXIOS.post(url,params)
  }

  create_csrf_token() :string {
    return $('meta[name=csrf-token]').attr('content') != undefined && $('meta[name=csrf-token]').attr('content') || ""
  }
}