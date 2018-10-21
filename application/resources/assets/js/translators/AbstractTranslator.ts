import ResponseModel from '../models/common/ResponseModel';
import MessageModel from '../models/common/MessageModel';
import { AxiosResponse } from 'axios';

export default class AbstractTranslator{

	public static basicTranslate(response:AxiosResponse<any>):ResponseModel<any>{
        var result = new ResponseModel<any>("");

        result.$status = response.status
        result.$message =[]
        result.$error = !(response.status === 200)

        if(!result.$error){
            return result
        }

        var result_data = response.data["result_data"] 

		for(var snipet in result_data){
            var item:MessageModel = new MessageModel();
                
            item.$code = result_data[snipet].code
            item.$message = result_data[snipet].message
                
            result.$message.push(item)
        }
		
		return result
    }

    public static translateId(response:AxiosResponse<any>):ResponseModel<string>{
        var result = AbstractTranslator.basicTranslate(response)
        if(result.$error){
            return result
        }
        var result_data = response.data["result_data"]
        result.$body = result_data["id"]
        return result
    }

    public static translateTotalCount(response:AxiosResponse<any>):number{
        var result_data = response.data["result_data"]
        return result_data.total_count
    }
}