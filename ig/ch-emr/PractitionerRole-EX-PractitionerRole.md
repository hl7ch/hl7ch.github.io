# EX-PractitionerRole - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-PractitionerRole**

## Example PractitionerRole: EX-PractitionerRole

Profile: [CH IPS PractitionerRole](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-practitionerrole.html)

**active**: true

**practitioner**: [Dr. med. Sarah Huber](Practitioner-EX-Practitioner.md)

**organization**: [Gynäkologie Praxis Basel](Organization-EX-Organization-GynPraxis.md)

**code**: Ärztin

**specialty**: Gynäkologie und Geburtshilfe

**telecom**: [+41 61 265 25 25](tel:+41612652525), [s.huber@gynpraxis-basel.ch](mailto:s.huber@gynpraxis-basel.ch)



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "EX-PractitionerRole",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitionerrole"]
  },
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/EX-Practitioner",
    "display" : "Dr. med. Sarah Huber"
  },
  "organization" : {
    "reference" : "Organization/EX-Organization-GynPraxis",
    "display" : "Gynäkologie Praxis Basel"
  },
  "code" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "309343006"
    }],
    "text" : "Ärztin"
  }],
  "specialty" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "394586005"
    }],
    "text" : "Gynäkologie und Geburtshilfe"
  }],
  "telecom" : [{
    "system" : "phone",
    "value" : "+41 61 265 25 25",
    "use" : "work"
  },
  {
    "system" : "email",
    "value" : "s.huber@gynpraxis-basel.ch",
    "use" : "work"
  }]
}

```
