import UIKit

// MARK: - Solution

class Node {
    var data: Int
    var next: Node?
    
    init(_ data: Int, _ next: Node? = nil) {
        self.data = data
        self.next = next
    }
}

func length(_ head: Node?) -> Int {
    if head == nil {
        return 0
    }
    
    var len = 0
    var current = head
    while current != nil {
        len += 1
        current = current?.next
    }
    return len
}

func printLinkedList(_ head: Node?) {
    if head == nil { return }
    
    var result = [Int]()
    var node = head
    result.append(node!.data)
    
    while node?.next != nil {
        result.append(node!.next!.data)
        node = node?.next
    }
    
    print(result)
}

func findMerge(headA: Node?, headB: Node?) -> Int? {
    let m = length(headA)
    let n = length(headB)
    
    var currentA = headA
    
    for _ in 0...m-1 {
        var currentB = headB
        for _ in 0...n-1 {
            let A = currentA?.data
            let B = currentB?.data
            if A == B {
                return A
            }
            currentB = currentB?.next
        }
        currentA = currentA?.next
    }
    return nil
}


// MARK: - Test Case

let node6 = Node(6)
let node5 = Node(5, node6)
let node4 = Node(4, node5)
let node3 = Node(3, node4)
let node2 = Node(2, node3)
let node1 = Node(1, node2)
let node11 = Node(11, node4)
let node10 = Node(10, node11)

printLinkedList(node1)
printLinkedList(node10)

findMerge(headA: node1, headB: node10)
