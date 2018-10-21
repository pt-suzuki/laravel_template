export default class SimpleKeyValueModel{
	private key:string;
	private value:string;
	private id:number;

	constructor(){
		this.key = "";
		this.value = "";
		this.id = 0;
	}

    /**
     * Getter $id
     * @return {number}
     */
	public get $id(): number {
		return this.id;
	}

    /**
     * Setter $id
     * @param {number} value
     */
	public set $id(value: number) {
		this.id = value;
	}

    /**
     * Getter $key
     * @return {string}
     */
	public get $key(): string {
		return this.key;
	}

    /**
     * Getter $value
     * @return {string}
     */
	public get $value(): string {
		return this.value;
	}

    /**
     * Setter $key
     * @param {string} value
     */
	public set $key(value: string) {
		this.key = value;
	}

    /**
     * Setter $value
     * @param {string} value
     */
	public set $value(value: string) {
		this.value = value;
	}

	
}