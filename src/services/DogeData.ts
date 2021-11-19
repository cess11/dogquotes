import { dogeapi } from 'src/boot/axios';

class DogeData {
    getDoge() {
        return dogeapi.get('/')
    }
}

export default new DogeData()