# UC3-PractitionerRole-Hausarzt - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC3-PractitionerRole-Hausarzt**

## Example PractitionerRole: UC3-PractitionerRole-Hausarzt

Profile: [CH IPS PractitionerRole](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-practitionerrole.html)

**active**: true

**practitioner**: [Practitioner UC3 Hausarzt (official)](Practitioner-UC3-Practitioner-Hausarzt.md)

**organization**: [Organization Hausarztpraxis UC3](Organization-UC3-Organization-Hausarztpraxis.md)

**code**: Arzt

**specialty**: Allgemeine Innere Medizin



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "UC3-PractitionerRole-Hausarzt",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitionerrole"]
  },
  "active" : true,
  "practitioner" : {
    "reference" : "Practitioner/UC3-Practitioner-Hausarzt"
  },
  "organization" : {
    "reference" : "Organization/UC3-Organization-Hausarztpraxis"
  },
  "code" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "309343006"
    }],
    "text" : "Arzt"
  }],
  "specialty" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "419772000"
    }],
    "text" : "Allgemeine Innere Medizin"
  }]
}

```
