package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.StudentenDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.Studenten;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;
import java.util.List;

/**
 * Created by DENCIO on 7/9/2018.
 */

@Path("/studenten")
public class StudentenController {

    private StudentenDAO studentenDAO = new StudentenDAO();

    @Path("/list")
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    public List<Studenten> findAll() {
        return studentenDAO.loadAllStudenten();
    }

    @Path("/addStudent")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Studenten add(Studenten student) {
        return studentenDAO.addStudent(student);
    }

    @Path("/updateStudent")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Studenten update(Studenten student) {
        studentenDAO.updateStudent(student);
        return student;
    }

    @Path("/removeStudent")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Studenten remove(Studenten student) {
        studentenDAO.deleteStudent(student);
        return student;
    }

    @Path("/getStudent")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public Studenten getStudent(Studenten student) {
        return studentenDAO.getStudent(student.getStudent_id());
    }

}
