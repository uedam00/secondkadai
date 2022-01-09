//
//  ViewController.swift
//  secondkadai.App
//
//  Created by Apple on 2022/01/09.
//

import UIKit

class ViewController: UIViewController {
    @IBOutlet weak var label: UILabel!
    @IBAction func handle(_ sender: Any) {
        label.text = "swift"
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view.
    }


}

