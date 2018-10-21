import DropDownModel from '../../models/common/SimpleKeyValueModel';
import { AxiosResponse } from 'axios';

export default class DropDownTranslator{

	public static translateByEnum(responce:AxiosResponse<any>):DropDownModel[]{
		var result_list:DropDownModel[] = []
		var item_list = responce.data
		
		for(var snipet in item_list){
			var item:DropDownModel = new DropDownModel();
			
			item.$key = item_list[snipet].code
			item.$value = item_list[snipet].name
			result_list.push(item)
		}

		return result_list
	}
}