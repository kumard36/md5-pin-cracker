# md5-pin-cracker
This application uses a very simple brute force attack to "reverse" an MD5 hash. It is really not reversing the hash at all as that would be impossible. Instead it knows that the original pre hash text was a numeric pin with exactly four characters.

So the application uses four nested loops and tests all 10,000 possible four digit PINs, and generates the hashes of those PINs to determine the original PIN.

This is a lesson in how easy it is to crack short passwords with a limited alphabet. While this works well to crack very short passwords it is not practical as password length grows.

A more sophisticated attack to reverse hashes which uses a lot of storage to pre-compute lots of hashes and look them up quickly is called "Rainbow Tables". This tiny application is not using a Rainbow Table approach.
