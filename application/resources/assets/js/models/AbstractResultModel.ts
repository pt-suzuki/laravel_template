import IResultModel from "../models/IResultModel";

export default class AbstractResultModel<T> implements IResultModel{
    private total_count:number;
    private result_list:T[];

    public constructor(){
        this.total_count = 0
        this.result_list = []
    }

    /**
     * Getter $total_count
     * @return {number}
     */
	public get $total_count(): number {
		return this.total_count;
	}

    /**
     * Getter $result_list
     * @return {T[]}
     */
	public get $result_list(): T[] {
		return this.result_list;
	}

    /**
     * Setter $total_count
     * @param {number} value
     */
	public set $total_count(value: number) {
		this.total_count = value;
	}

    /**
     * Setter $result_list
     * @param {T[]} value
     */
	public set $result_list(value: T[]) {
		this.result_list = value;
	}

    
}