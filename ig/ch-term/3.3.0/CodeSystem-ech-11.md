# eCH-011 Types - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-011 Types**

## CodeSystem: eCH-011 Types 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/ech-11 | *Version*:3.3.0 |
| Active as of 2018-11-12 | *Computable Name*:ECH11CodeSystem |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-011 defines different Types like Names, contactAdress etc. They are further described from the[BFS](https://www.bfs.admin.ch/bfs/de/home/register/personenregister/registerharmonisierung/nomenklaturen.assetdetail.349276.html)in 'Amtlicher Katalog der Merkmale' (Official catalogue of characteristics), Copyright BFS, Neuchâtel 2014, ISBN 978-3-303-00504-0 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ECH11FirstNameDataTypes](ValueSet-ech-11-firstnamedatatype.md)
* [ECH11NameDataTypes](ValueSet-ech-11-namedatatype.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ech-11",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11",
  "version" : "3.3.0",
  "name" : "ECH11CodeSystem",
  "title" : "eCH-011 Types",
  "status" : "active",
  "experimental" : false,
  "date" : "2018-11-12",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "eCH-011 defines different Types like Names, contactAdress etc. They are further described from the [BFS](https://www.bfs.admin.ch/bfs/de/home/register/personenregister/registerharmonisierung/nomenklaturen.assetdetail.349276.html) in 'Amtlicher Katalog der Merkmale' (Official catalogue of characteristics), Copyright BFS, Neuchâtel 2014, ISBN 978-3-303-00504-0",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "compositional" : false,
  "versionNeeded" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "officialName",
      "display" : "Amtlicher Name (zwingend), BFS-211",
      "definition" : "The official name corresponds to the name in the Swiss civil status register. For foreign persons without civil status event in Switzerland, this name corresponds to the name in the foreign passport or on the identity card."
    },
    {
      "code" : "originalName",
      "display" : "Ledigname, BFS-212",
      "definition" : "Name in accordance with official documents, which a person maintained immediately before his first marriage or establishment of a registered partnership or, based on a decision to change the name, acquired as a new maiden name."
    },
    {
      "code" : "allianceName",
      "display" : "Allianzname, BFS-213",
      "definition" : "The alliance name indicates the association of two persons who are married or living in a registered partnership. An already used alliance name can be used after dissolution of the marriage or partnership if the official name was not changed at the time of dissolution. The partner's maiden name or the partner's own maidne gname is appended to the official name with a hyphen. On request, the alliance name can be entered in the passport or on the ID card."
    },
    {
      "code" : "nameOnForeignPassport",
      "display" : "Name im ausländischen Pass, BFS-214",
      "definition" : "This name corresponds to the entry in the passport according to the machine-readable zone (MRZ) of the passport."
    },
    {
      "code" : "aliasName",
      "display" : "Aliasname, BFS-215",
      "definition" : "Name (e.g. artist's or order's name) that may be used on the basis of an approved request. The alias name can consist of one or more parts (e.g. also of alias first name and alias name)."
    },
    {
      "code" : "otherName",
      "display" : "Andere amtliche Name, BFS-216",
      "definition" : "Other official names according to Swiss civil status documents or foreign documents which are neither surnames nor first names."
    },
    {
      "code" : "declaredForeignName",
      "display" : "Name gemäss Deklaration, BFS-217"
    },
    {
      "code" : "officialFirstName",
      "display" : "Amtliche Vornamen (zwingend), BFS-221",
      "definition" : "First names as per birth certificate or civil register/Infostar in the order listed or as per foreign identity documents."
    },
    {
      "code" : "callName",
      "display" : "Rufname, BFS-222",
      "definition" : "A person has the right to choose a call name from the list of his official first names. The call name can consist of one or more first names."
    },
    {
      "code" : "firstNameOnForeignPassport",
      "display" : "Vornamen im ausländischen Pass, BFS-223",
      "definition" : "First names for persons of foreign nationality. To use in conjunction with the name in the foreign passport as defined under 214"
    },
    {
      "code" : "declaredForeignFirstName",
      "display" : "Vorname(n) gemäss Deklaration, BFS-224",
      "definition" : "For persons of foreign nationality who do not possess official documents (mainly in the field of asylum)."
    },
    {
      "code" : "contactData",
      "display" : "Zustelladresse, BFS-61",
      "definition" : "Information on how the person can be contacted, at least with the contact address, and possibly further contact information such as identification of the person if the contact address is not the registered resident."
    }
  ]
}

```
