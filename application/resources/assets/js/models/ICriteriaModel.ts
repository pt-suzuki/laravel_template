import SimpleKeyValueModel from "./common/SimpleKeyValueModel";

export default interface ICriteriaModel{
    $row_count: number
    $current_page: number
    $criteria_list:SimpleKeyValueModel[]
}