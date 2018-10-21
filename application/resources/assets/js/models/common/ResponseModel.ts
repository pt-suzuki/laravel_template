import MessageModel from "./MessageModel"

export default class ResponseModel<T>{
	private error:boolean;
	private message:MessageModel[];
    private body:T;
    private status:number;

    constructor(obj:T){
		this.error = false;
        this.message = []; 
        this.status = 0;
        this.body = obj
	}

    /**
     * Getter $status
     * @return {number}
     */
	public get $status(): number {
		return this.status;
	}

    /**
     * Setter $status
     * @param {number} value
     */
	public set $status(value: number) {
		this.status = value;
	}

    /**
     * Getter $message
     * @return {MessageModel[]}
     */
	public get $message(): MessageModel[] {
		return this.message;
	}

    /**
     * Setter $message
     * @param {MessageModel[]} value
     */
	public set $message(value: MessageModel[]) {
		this.message = value;
	}

    /**
     * Getter $error
     * @return {boolean}
     */
	public get $error(): boolean {
		return this.error;
	}

    /**
     * Getter $body
     * @return {T}
     */
	public get $body(): T {
		return this.body;
	}

    /**
     * Setter $error
     * @param {boolean} value
     */
	public set $error(value: boolean) {
		this.error = value;
	}

    /**
     * Setter $body
     * @param {T[]} value
     */
	public set $body(value: T) {
		this.body = value;
	}
}