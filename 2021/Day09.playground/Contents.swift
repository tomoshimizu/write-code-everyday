import Foundation


// MARK: Solution

public func solution(_ A : [String], _ B : [String], _ P : String) -> String {
    
    guard !A.isEmpty else { return "" }
    guard !B.isEmpty else { return "" }
    guard P != "" else { return "" }
        
    var idx: Int?
    var result = ""
    
    for i in 0...B.count - 1 {
        if B[i].contains(P) {
            idx = i
        }
    }
    
    if let resultIdx = idx {
        result = A[resultIdx]
    } else {
        result = "NO CONTACT"
    }
    
    return result
}


// MARK: Test Case

let A = ["pim", "pom"]
let B = ["999999999", "777888999"]
let P = "88999"

solution(A, B, P) // pom
solution(["sander", "amy", "ann"], ["12345", "23456", "123"], "1") // ann
solution(["ada,", "eva", "leo"], ["1212", "1111", "4444"], "112") // NO CONTACT
solution([String](), [String](), "")
solution(A, B, "")



