pub fn add(left: u64, right: u64) -> u64 {
    left + right
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn it_works() {
        let result = add(2, 2);
        assert_eq!(result, 4);
    }
}
////////////////////////////////////////////////////////
use sha2::{Sha256, Digest};
use rayon::prelude::*;
use std::fs::File;
use std::io::Read;

#[no_mangle]
pub extern "C" fn calculate_hashes(count: i32, paths: *const *const std::os::raw::c_char) -> *mut *mut std::os::raw::c_char {
    // ... implementación que procesa en paralelo y devuelve un array de strings
}
