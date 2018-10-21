export default class BulkInsertResultModel{
    private executing_count:number;

    constructor()
    {
        this.executing_count = 0
    }
    /**
     * Getter $executing_count
     * @return {number}
     */
	public get $executing_count(): number {
		return this.executing_count;
	}

    /**
     * Setter $executing_count
     * @param {number} value
     */
	public set $executing_count(value: number) {
		this.executing_count = value;
	}
    

}