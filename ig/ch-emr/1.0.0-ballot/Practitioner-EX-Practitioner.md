# EX - Practitioner Dr. Sarah Huber - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX - Practitioner Dr. Sarah Huber**

## Example Practitioner: EX - Practitioner Dr. Sarah Huber

Profile: [CH IPS Practitioner](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-practitioner.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.3.0/NamingSystem-gln.html)/7601007922000

**name**: Sarah Huber (Official)

**telecom**: [+41 61 265 25 25](tel:+41612652525), [s.huber@gynpraxis-basel.ch](mailto:s.huber@gynpraxis-basel.ch)

**address**: Petersgraben 4 Basel 4051 CH 

**gender**: Female

### Qualifications

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Code** | **Period** | **Issuer** |
| * | Gynäkologie und Geburtshilfe | 2005-01-01 --> (ongoing) | Schweizerische Gesellschaft für Gynäkologie und Geburtshilfe (SGGG) |



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "EX-Practitioner",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601007922000"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Huber",
    "given" : ["Sarah"],
    "prefix" : ["Dr. med."],
    "_prefix" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
        "valueCode" : "AC"
      }]
    }]
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
  }],
  "address" : [{
    "line" : ["Petersgraben 4"],
    "city" : "Basel",
    "postalCode" : "4051",
    "country" : "CH"
  }],
  "gender" : "female",
  "qualification" : [{
    "code" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "code" : "394586005"
      }],
      "text" : "Gynäkologie und Geburtshilfe"
    },
    "period" : {
      "start" : "2005-01-01"
    },
    "issuer" : {
      "display" : "Schweizerische Gesellschaft für Gynäkologie und Geburtshilfe (SGGG)"
    }
  }]
}

```
