package kr.jejunu.JejunuBus.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class JejunuBusFreeBoard {
	
	@RequestMapping("/board")
	public String action(){
		return "";
	}
}
