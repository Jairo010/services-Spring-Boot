package ec.edu.jairo.app.Controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.client.RestTemplate;

@RestController
@RequestMapping("test")
public class api {

    @Autowired
    private static final String PHP_SERVICE_URL = "http://localhost/quintosoa/api.php?cedula=";

    @GetMapping("/consume/{cedula}")
    @ResponseBody
    public String servicePHP(@PathVariable String cedula) {
        RestTemplate restTemplate = new RestTemplate();
        String response = restTemplate.getForObject(PHP_SERVICE_URL+cedula, String.class);

        return response;
    }

}
