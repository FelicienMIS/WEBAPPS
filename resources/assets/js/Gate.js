export default class Gate{

    constructor(user){
        this.user = user;
    }
    isEcolePrimaire(){
        return this.user.type === 'ecolePrimaire';   
    }
    isPharmacie(){
        return this.user.type === 'pharmacie'; 
    }
    isAdmin(){
        return this.user.type === 'admin';
    }

    isUser(){
        return this.user.type === 'user';
    }
    isAdminOrAuthor(){
        if(this.user.type === 'admin' || this.user.type === 'author'){
            return true;
        }

    }
    isAuthorOrUser(){
        if(this.user.type === 'user' || this.user.type === 'author'){
            return true;
        }

    }



}

