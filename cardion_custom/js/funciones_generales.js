function empty(obj) {
    if (typeof obj == 'undefined') return true;
    if (obj === "0" || obj === "" || obj === null || obj === false) return true;
    if (typeof obj == 'number' && (isNaN(obj) || obj == 0)) return true;
    if (typeof obj == 'object' && obj.length == 0) return true;
    if (obj instanceof Date && isNaN(Number(obj))) return true;
    return false;
}
