import SimpleKeyValueModel from './common/SimpleKeyValueModel';
import ICriteriaModel from '../models/ICriteriaModel';

export default class AbstractCriteriaModel implements ICriteriaModel{
    private row_count:number;
    private current_page:number;
    private criteria_list:SimpleKeyValueModel[];

    public constructor(){
        this.row_count = 10
        this.current_page = 1
        this.criteria_list = []
    }

    /**
     * Getter $row_count
     * @return {number}
     */
	public get $row_count(): number {
		return this.row_count;
	}

    /**
     * Getter $current_page
     * @return {number}
     */
	public get $current_page(): number {
		return this.current_page;
	}

    /**
     * Setter $row_count
     * @param {number} value
     */
	public set $row_count(value: number) {
		this.row_count = value;
	}

    /**
     * Setter $current_page
     * @param {number} value
     */
	public set $current_page(value: number) {
		this.current_page = value;
    }
    
    /**
     * Getter $criteria_list
     * @return {SimpleKeyValueModel[]}
     */
	public get $criteria_list(): SimpleKeyValueModel[] {
		return this.criteria_list;
	}

    /**
     * Setter $criteria_list
     * @param {SimpleKeyValueModel[]} value
     */
	public set $criteria_list(value: SimpleKeyValueModel[]) {
		this.criteria_list = value;
    }
    
    public getRowCount(): number{
        return this.$row_count
    }
    public getCurrentPage(): number{
        return this.$current_page
    }
}