package ec.edu.jairo.app.Controller;

import ec.edu.jairo.app.Models.Estudiante;
import ec.edu.jairo.app.Repository.EstudianteRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("rest")
public class apiEstudiante {
    @Autowired
    EstudianteRepository estudianteRepository;
    @GetMapping("/greating")
    public String greating(){
        return "Hello world";
    }

    @GetMapping("/all")
    public List<Estudiante> getEstudiantes(){
        return estudianteRepository.findAll();
    }
    @PostMapping("/save")
    public Estudiante addEstudent(@RequestBody Estudiante estudiante){
        return estudianteRepository.saveAndFlush(estudiante);
    }

    @PutMapping("edit/{cedula}")
    public Estudiante editEstudiante(@PathVariable String cedula, @RequestBody Estudiante estudiante){
        estudiante.setCedula(cedula);
        return estudianteRepository.saveAndFlush(estudiante);
    }

    @DeleteMapping("delete/{cedula}")
    public void deleteEstudiante(@PathVariable String cedula){
        estudianteRepository.deleteById(cedula);
    }


}
