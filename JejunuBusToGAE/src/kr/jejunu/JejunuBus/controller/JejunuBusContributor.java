package kr.jejunu.JejunuBus.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class JejunuBusContributor {
	@RequestMapping("/contributor" )
	public String action(){
		
		return "contributor";
	}
}
