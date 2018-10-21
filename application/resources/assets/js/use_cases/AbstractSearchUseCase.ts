import ApiConnection from "./ApiConnection";
import ICriteriaModel from "../models/ICriteriaModel";
import SimpleKeyValueModel from "../models/common/SimpleKeyValueModel";

export default class AbstractSearchUseCase extends ApiConnection{
    parceKeywards(criteria_list:SimpleKeyValueModel[]):string{
        var keywords:string = ""
		criteria_list.forEach(element => {
			if(element.$value.trim() !== ""){
				if(keywords != ""){
					keywords += ","
				}
				keywords += element.$key
				keywords += ":"
				keywords += element.$value
			}
        });
        return keywords
	}
}