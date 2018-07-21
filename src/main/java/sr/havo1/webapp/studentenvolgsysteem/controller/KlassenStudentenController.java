package sr.havo1.webapp.studentenvolgsysteem.controller;

import sr.havo1.webapp.studentenvolgsysteem.dao.KlassenStudentenDAO;
import sr.havo1.webapp.studentenvolgsysteem.entity.KlassenStudenten;

import javax.ws.rs.*;
import javax.ws.rs.core.MediaType;

/**
 * Created by DENCIO on 7/18/2018.
 */

@Path("/klassenStudenten")
public class KlassenStudentenController {

    private KlassenStudentenDAO klassenStudentenDAO = new KlassenStudentenDAO();

    @Path("/addKlasStudent")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public KlassenStudenten add(KlassenStudenten klasStudent) {
        return klassenStudentenDAO.addKlasStudent(klasStudent);
    }

    @Path("/removeKlasStudent")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public KlassenStudenten remove(KlassenStudenten klasStudent) {
        klassenStudentenDAO.deleteKlasStudent(klasStudent);
        return klasStudent;
    }

    @Path("/getKlasStudent")
    @POST
    @Consumes(MediaType.APPLICATION_JSON)
    @Produces(MediaType.APPLICATION_JSON)
    public KlassenStudenten getKlasStudent(KlassenStudenten klasStudent) {
        return klassenStudentenDAO.getKlasStudent(klasStudent.getKlas_student_id());
    }
}
