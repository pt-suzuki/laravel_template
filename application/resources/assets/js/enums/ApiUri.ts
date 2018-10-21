export module ApiUri{
    const DOMAIN:string = 'http://localhost:9000/'
    const BASE_URL:string = DOMAIN + 'api/v1/'


    export module OAUTH{
        const OAUTH:string = DOMAIN + "oauth/"

        export const ACCESS_TOKEN = OAUTH + "access_token"
        export const LOGIN_CHECK = OAUTH + "login_check"
    }


}