import UIKit


// MARK: Solution

func solution(nums: [Int], times: Int) -> [Int] {
    guard !nums.isEmpty else { return [] }
    guard times > 0 else { return nums }
    
    var result = nums
    
    for _ in 1...times {
        result = rotateRightOnce(nums: result)
        print(result)
    }
    
    return result
}

func rotateRightOnce(nums: [Int]) -> [Int] {
    var newNums = Array<Int>(repeating: 0, count: nums.count)
    
    for i in 0..<nums.count - 1 {
        newNums[i + 1] = nums[i]
    }
    newNums[0] = nums.last!
    
    return newNums
}


// MARK: Test Case

solution(nums: [1, 2, 3, 4, 5], times: 1) // 5 1 2 3 4
solution(nums: [1, 2, 3, 4, 5], times: 2) // 4 5 1 2 3
solution(nums: [1, 2, 3, 4, 5], times: 3) // 3 4 5 1 2
solution(nums: [], times: 0)
