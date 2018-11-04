export module PageUri{
    const _SEARCH:string = "search"
    const _SEARCH_RESULT:string = "result"
    const _CONTENT:string = "content"
    const _EDIT:string = "edit"

    export module AUTH{
        export const LOGIN =   "/login"
    }

    export module DOCUMENT{
        const DOCUMENT = "/document"
        export const BASIC = DOCUMENT
        export const CHECK_SHEET = DOCUMENT + "/check_sheet"
    }

    export const DASH_BORD = "/dash_bord"
    export const TEST = "/test"
    export const OTHER = "/other"
}